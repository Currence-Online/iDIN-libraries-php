<?php

namespace BankId\Merchant\Library\Schemas\saml\protocol;

/**
 * Class representing ArtifactResolveType
 *
 * 
 * XSD Type: ArtifactResolveType
 */
class ArtifactResolveType extends RequestAbstractType
{

    /**
     * @property string $artifact
     */
    private $artifact = null;

    /**
     * Gets as artifact
     *
     * @return string
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    /**
     * Sets a new artifact
     *
     * @param string $artifact
     * @return self
     */
    public function setArtifact($artifact)
    {
        $this->artifact = $artifact;
        return $this;
    }


}

