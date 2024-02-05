<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class FlexFlowList extends ListResource
    {
    /**
     * Construct the FlexFlowList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];

        $this->uri = '/FlexFlows';
    }

    /**
     * Create the FlexFlowInstance
     *
     * @param string $friendlyName A descriptive string that you create to describe the Flex Flow resource.
     * @param string $chatServiceSid The SID of the chat service.
     * @param string $channelType
     * @param array|Options $options Optional Arguments
     * @return FlexFlowInstance Created FlexFlowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $friendlyName, string $chatServiceSid, string $channelType, array $options = []): FlexFlowInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' =>
                $friendlyName,
            'ChatServiceSid' =>
                $chatServiceSid,
            'ChannelType' =>
                $channelType,
            'ContactIdentity' =>
                $options['contactIdentity'],
            'Enabled' =>
                Serialize::booleanToString($options['enabled']),
            'IntegrationType' =>
                $options['integrationType'],
            'Integration.FlowSid' =>
                $options['integrationFlowSid'],
            'Integration.Url' =>
                $options['integrationUrl'],
            'Integration.WorkspaceSid' =>
                $options['integrationWorkspaceSid'],
            'Integration.WorkflowSid' =>
                $options['integrationWorkflowSid'],
            'Integration.Channel' =>
                $options['integrationChannel'],
            'Integration.Timeout' =>
                $options['integrationTimeout'],
            'Integration.Priority' =>
                $options['integrationPriority'],
            'Integration.CreationOnMessage' =>
                Serialize::booleanToString($options['integrationCreationOnMessage']),
            'LongLived' =>
                Serialize::booleanToString($options['longLived']),
            'JanitorEnabled' =>
                Serialize::booleanToString($options['janitorEnabled']),
            'Integration.RetryCount' =>
                $options['integrationRetryCount'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new FlexFlowInstance(
            $this->version,
            $payload
        );
    }


    /**
     * Reads FlexFlowInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return FlexFlowInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Streams FlexFlowInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($options, $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of FlexFlowInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return FlexFlowPage Page of FlexFlowInstance
     */
    public function page(
        array $options = [],
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): FlexFlowPage
    {
        $options = new Values($options);

        $params = Values::of([
            'FriendlyName' =>
                $options['friendlyName'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new FlexFlowPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of FlexFlowInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return FlexFlowPage Page of FlexFlowInstance
     */
    public function getPage(string $targetUrl): FlexFlowPage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new FlexFlowPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a FlexFlowContext
     *
     * @param string $sid The SID of the Flex Flow resource to delete.
     */
    public function getContext(
        string $sid
        
    ): FlexFlowContext
    {
        return new FlexFlowContext(
            $this->version,
            $sid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.FlexApi.V1.FlexFlowList]';
    }
}
