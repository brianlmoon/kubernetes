<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class WebhookConversion extends \Moonspot\Kubernetes\BaseObject {

    /**
     * clientConfig is the instructions for how to call the webhook if strategy
     * is `Webhook`.
     */
    public ?WebhookClientConfig $clientConfig = null;

    /**
     * conversionReviewVersions is an ordered list of preferred
     * `ConversionReview` versions the Webhook expects. The API server will use
     * the first version in the list which it supports. If none of the versions
     * specified in this list are supported by API server, conversion will fail
     * for the custom resource. If a persisted Webhook configuration specifies
     * allowed versions and does not include any versions known to the API
     * Server, calls to the webhook will fail.
     */
    public StringSet $conversionReviewVersions;

    public function __construct() {
        $this->clientConfig = new WebhookClientConfig();
        $this->conversionReviewVersions = new StringSet();
    }
}
