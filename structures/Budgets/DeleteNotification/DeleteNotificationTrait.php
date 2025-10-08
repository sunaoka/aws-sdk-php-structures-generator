<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteNotification;

trait DeleteNotificationTrait
{
    /**
     * @param DeleteNotificationRequest $args
     * @return DeleteNotificationResponse
     */
    public function deleteNotification(DeleteNotificationRequest $args)
    {
        $result = parent::deleteNotification($args->toArray());
        return new DeleteNotificationResponse($result->toArray());
    }
}
