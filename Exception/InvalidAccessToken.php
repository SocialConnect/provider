<?php
/**
 * SocialConnect project
 * @author: Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */
declare(strict_types=1);

namespace SocialConnect\Provider\Exception;

use Throwable;

class InvalidAccessToken extends \SocialConnect\Common\Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = 'Invalid access token', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
