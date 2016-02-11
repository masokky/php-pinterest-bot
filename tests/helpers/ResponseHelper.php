<?php

namespace seregazhuk\tests\helpers;

/**
 * Class ResponseHelper
 *
 * Helper for creating different dummy responses for testing
 *
 * @package seregazhuk\tests\helpers
 */
trait ResponseHelper
{
    /**
     * Create a dummy response from Pinterest
     * @param array $data
     * @return array
     */
    protected function createApiResponse($data = [])
    {
        return array('resource_response' => $data);
    }

    /**
     * Create a success dummy response
     * @return array
     */
    protected function createSuccessApiResponse()
    {
        return $this->createApiResponse(['data' => 'success']);
    }

    /**
     * Create an error dummy response
     * @return array
     */
    protected function createErrorApiResponse()
    {
        return $this->createApiResponse(
            [
                'error' => [
                    'message' => 'error'
                ]
            ]
        );
    }

    /**
     * Create a not found dummy response
     * @return array
     */
    protected function createNotFoundApiResponse()
    {
        return [
            'api_error_code' => 404,
            'message'        => 'Not found',
        ];
    }

    /**
     * Create a dummy paginated response
     * @return array
     */
    protected function createPaginatedResponse()
    {
        return [
            'resource_response' => [
                'data' => [
                    ['id' => 1],
                    ['id' => 2],
                ],
            ],
        ];
    }
}