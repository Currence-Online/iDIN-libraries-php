<?php

namespace BankId\Merchant\Library;

/**
 * ILogger interface: defines methods for logging messages and debug output
 */
interface ILogger {
    /**
     * @param Configuration $config
     * @param $message
     * @return mixed
     */
    public function log(Configuration $config, $message);

    /**
     * @param Configuration $config
     * @param $message
     * @return mixed
     */
    public function logXmlMessage(Configuration $config, $message);
}

/**
 * The default logger used by the library
 */
class Logger implements ILogger {
    /**
     * Logs a trace message to error_log(). See: http://php.net/manual/en/errorfunc.configuration.php#ini.error-log
     * @param Configuration $config
     * @param $message
     */
    public function log(Configuration $config, $message) {
        if ($config->LogsEnabled) 
        {
            // error_log($message, 0);

            $callers = debug_backtrace();
            $function = $callers[1]['function'];

            $filename = $config->LogsFileName;
            $now = new \DateTime();
            $msec = substr(explode(' ', \microtime())[0], 2, 3);
            
            $logs_subdir = $config->LogsPattern;

            $logs_subdir = str_replace('%Y', $now->format('Y'), $logs_subdir);
            $logs_subdir = str_replace('%M', $now->format('m'), $logs_subdir);
            $logs_subdir = str_replace('%D', $now->format('d'), $logs_subdir);
            $logs_subdir = str_replace('%h', $now->format('H'), $logs_subdir);
            $logs_subdir = str_replace('%m', $now->format('i'), $logs_subdir);
            $logs_subdir = str_replace('%s', $now->format('s'), $logs_subdir);
            $logs_subdir = str_replace('%f', $msec, $logs_subdir);
            $logs_subdir = str_replace('%a', '', $logs_subdir);
            
            $full_path = join(DIRECTORY_SEPARATOR, array($config->LogsLocation, $logs_subdir, $filename));
            
            if (!file_exists(dirname($full_path))) {
                mkdir(dirname($full_path), 0700, TRUE);
            }

            file_put_contents($full_path, date('Y-m-d H:i:s : ') . $function . '() - ' . $message . "\n", FILE_APPEND);
        }
    }

    /**
     * Logs a request/response xml message to the directory specified in the configuration.
     * @param Configuration $config
     * @param $message
     */
    public function logXmlMessage(Configuration $config, $message) {
        if ($config->ServiceLogsEnabled) {
            $dom = new \DOMDocument();
            $dom->loadXML($message);
            
            $filename = $config->ServiceLogsPattern;
            $now = new \DateTime();
            $msec = substr(explode(' ', \microtime())[0], 2, 3);
            
            $filename = str_replace('%Y', $now->format('Y'), $filename);
            $filename = str_replace('%M', $now->format('m'), $filename);
            $filename = str_replace('%D', $now->format('d'), $filename);
            $filename = str_replace('%h', $now->format('H'), $filename);
            $filename = str_replace('%m', $now->format('i'), $filename);
            $filename = str_replace('%s', $now->format('s'), $filename);
            $filename = str_replace('%f', $msec, $filename);
            $filename = str_replace('%a', $dom->documentElement->localName, $filename);
            
            $filename = join(DIRECTORY_SEPARATOR, array($config->ServiceLogsLocation, $filename));
            
            if (!file_exists(dirname($filename))) {
                mkdir(dirname($filename), 0700, TRUE);
            }
            
            file_put_contents($filename, $message);
        }
    }
}