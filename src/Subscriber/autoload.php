<?php


 function autoload_5978aca8ea1b55b8bdd0adc0962f99ec($class)
{
    $classes = array(
        'mbzSubscriber\SubscriberWebService' => __DIR__ .'/SubscriberWebService.php',
        'mbzSubscriber\GetSubscriberByEmail' => __DIR__ .'/GetSubscriberByEmail.php',
        'mbzSubscriber\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'mbzSubscriber\GetSubscriberByEmailResponse' => __DIR__ .'/GetSubscriberByEmailResponse.php',
        'mbzSubscriber\Subscriber' => __DIR__ .'/Subscriber.php',
        'mbzSubscriber\SubscriberFieldData' => __DIR__ .'/SubscriberFieldData.php',
        'mbzSubscriber\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzSubscriber\GetSubscribersByEmail' => __DIR__ .'/GetSubscribersByEmail.php',
        'mbzSubscriber\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'mbzSubscriber\ArrayOfSubscriber' => __DIR__ .'/ArrayOfSubscriber.php',
        'mbzSubscriber\GetSubscribersByEmailResponse' => __DIR__ .'/GetSubscribersByEmailResponse.php',
        'mbzSubscriber\GetSubscriberByEncodedEmail' => __DIR__ .'/GetSubscriberByEncodedEmail.php',
        'mbzSubscriber\EEncodingType' => __DIR__ .'/EEncodingType.php',
        'mbzSubscriber\GetSubscriberByEncodedEmailResponse' => __DIR__ .'/GetSubscriberByEncodedEmailResponse.php',
        'mbzSubscriber\GetSubscribersByEncodedEmail' => __DIR__ .'/GetSubscribersByEncodedEmail.php',
        'mbzSubscriber\GetSubscribersByEncodedEmailResponse' => __DIR__ .'/GetSubscribersByEncodedEmailResponse.php',
        'mbzSubscriber\GetSubscriber' => __DIR__ .'/GetSubscriber.php',
        'mbzSubscriber\GetSubscriberResponse' => __DIR__ .'/GetSubscriberResponse.php',
        'mbzSubscriber\GetSubscriberByIdClient' => __DIR__ .'/GetSubscriberByIdClient.php',
        'mbzSubscriber\GetSubscriberByIdClientResponse' => __DIR__ .'/GetSubscriberByIdClientResponse.php',
        'mbzSubscriber\GetSubscriberFields' => __DIR__ .'/GetSubscriberFields.php',
        'mbzSubscriber\Field' => __DIR__ .'/Field.php',
        'mbzSubscriber\FieldListTypeValue' => __DIR__ .'/FieldListTypeValue.php',
        'mbzSubscriber\ArrayOfField' => __DIR__ .'/ArrayOfField.php',
        'mbzSubscriber\GetSubscriberFieldsResponse' => __DIR__ .'/GetSubscriberFieldsResponse.php',
        'mbzSubscriber\CountSubscribers' => __DIR__ .'/CountSubscribers.php',
        'mbzSubscriber\ArrayOfSubscriberFieldData' => __DIR__ .'/ArrayOfSubscriberFieldData.php',
        'mbzSubscriber\CountSubscribersResponse' => __DIR__ .'/CountSubscribersResponse.php',
        'mbzSubscriber\UpdateSubscriber' => __DIR__ .'/UpdateSubscriber.php',
        'mbzSubscriber\UpdateSubscriberResponse' => __DIR__ .'/UpdateSubscriberResponse.php',
        'mbzSubscriber\UpdateSubscribers' => __DIR__ .'/UpdateSubscribers.php',
        'mbzSubscriber\UpdateSubscribersResponse' => __DIR__ .'/UpdateSubscribersResponse.php',
        'mbzSubscriber\InsertSubscriber' => __DIR__ .'/InsertSubscriber.php',
        'mbzSubscriber\InsertSubscriberResponse' => __DIR__ .'/InsertSubscriberResponse.php',
        'mbzSubscriber\Unsubscribe' => __DIR__ .'/Unsubscribe.php',
        'mbzSubscriber\UnsubscribeResponse' => __DIR__ .'/UnsubscribeResponse.php',
        'mbzSubscriber\UnsubscribeFromPartnersOffers' => __DIR__ .'/UnsubscribeFromPartnersOffers.php',
        'mbzSubscriber\UnsubscribeFromPartnersOffersResponse' => __DIR__ .'/UnsubscribeFromPartnersOffersResponse.php',
        'mbzSubscriber\UnsubscribeFromSpecificNewsletter' => __DIR__ .'/UnsubscribeFromSpecificNewsletter.php',
        'mbzSubscriber\UnsubscribeFromSpecificNewsletterResponse' => __DIR__ .'/UnsubscribeFromSpecificNewsletterResponse.php',
        'mbzSubscriber\Subscribe' => __DIR__ .'/Subscribe.php',
        'mbzSubscriber\SubscribeResponse' => __DIR__ .'/SubscribeResponse.php',
        'mbzSubscriber\SubscribeNewSubscriber' => __DIR__ .'/SubscribeNewSubscriber.php',
        'mbzSubscriber\EcollectMode' => __DIR__ .'/EcollectMode.php',
        'mbzSubscriber\EcollectType' => __DIR__ .'/EcollectType.php',
        'mbzSubscriber\SubscribeNewSubscriberResponse' => __DIR__ .'/SubscribeNewSubscriberResponse.php',
        'mbzSubscriber\SubscribeToSpecificNewsletter' => __DIR__ .'/SubscribeToSpecificNewsletter.php',
        'mbzSubscriber\SubscribeToSpecificNewsletterResponse' => __DIR__ .'/SubscribeToSpecificNewsletterResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5978aca8ea1b55b8bdd0adc0962f99ec');

// Do nothing. The rest is just leftovers from the code generation.
{
}
