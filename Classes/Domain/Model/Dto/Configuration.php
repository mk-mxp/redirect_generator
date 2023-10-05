<?php

declare(strict_types=1);

namespace GeorgRinger\RedirectGenerator\Domain\Model\Dto;


class Configuration
{

    /** @var bool */
    protected $respectQueryParameters = false;

    /** @var bool */
    protected $keepQueryParameters = false;

    /** @var bool */
    protected $forceHttps = false;

    /** @var bool */
    protected $isRegexp = false;

    /** @var int */
    protected $targetStatusCode = 307;

    protected $disableHitCount = false;

    private const ALLOWED_STATUS_CODES = [301, 302, 303, 307];

    protected bool $overwriteExisting = false;

    /**
     * @return bool
     */
    public function getRespectQueryParameters(): bool
    {
        return $this->respectQueryParameters;
    }

    /**
     * @param bool $respectQueryParameters
     * @return Configuration
     */
    public function setRespectQueryParameters(bool $respectQueryParameters): Configuration
    {
        $this->respectQueryParameters = $respectQueryParameters;
        return $this;
    }

    /**
     * @return bool
     */
    public function getKeepQueryParameters(): bool
    {
        return $this->keepQueryParameters;
    }

    /**
     * @param bool $keepQueryParameters
     * @return Configuration
     */
    public function setKeepQueryParameters(bool $keepQueryParameters): Configuration
    {
        $this->keepQueryParameters = $keepQueryParameters;
        return $this;
    }

    /**
     * @return bool
     */
    public function getForceHttps(): bool
    {
        return $this->forceHttps;
    }

    /**
     * @param bool $forceHttps
     * @return Configuration
     */
    public function setForceHttps(bool $forceHttps): Configuration
    {
        $this->forceHttps = $forceHttps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRegexp(): bool
    {
        return $this->isRegexp;
    }

    /**
     * @param bool $isRegexp
     * @return Configuration
     */
    public function setIsRegexp(bool $isRegexp): Configuration
    {
        $this->isRegexp = $isRegexp;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetStatusCode(): int
    {
        return $this->targetStatusCode;
    }

    /**
     * @param int $targetStatusCode
     * @return Configuration
     */
    public function setTargetStatusCode(int $targetStatusCode): Configuration
    {
        $this->targetStatusCode = $targetStatusCode;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisableHitCount(): bool
    {
        return $this->disableHitCount;
    }

    /**
     * @param bool $disableHitCount
     * @return Configuration
     */
    public function setDisableHitCount(bool $disableHitCount): Configuration
    {
        $this->disableHitCount = $disableHitCount;
        return $this;
    }

    public function statusCodeIsAllowed(int $statusCode):bool
    {
        return in_array($statusCode, self::ALLOWED_STATUS_CODES, true);
    }

    public function getOverwriteExisting(): bool
    {
        return $this->overwriteExisting;
    }

    public function setOverwriteExisting(bool $overwriteExisting): self
    {
        $this->overwriteExisting = $overwriteExisting;
        return $this;
    }
}
