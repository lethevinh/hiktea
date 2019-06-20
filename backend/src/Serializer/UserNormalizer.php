<?php

namespace App\Serializer;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerInterface;

final class UserNormalizer implements NormalizerInterface, DenormalizerInterface, SerializerAwareInterface
{
    const DEFAULT_PASSWORD = 'password';

    private $decorated;

    private $encoder;

    public function __construct(NormalizerInterface $decorated, UserPasswordEncoderInterface $encoder)
    {
        if (!$decorated instanceof DenormalizerInterface) {
            throw new \InvalidArgumentException(sprintf('The decorated normalizer must implement the %s.', DenormalizerInterface::class));
        }

        $this->decorated = $decorated;
        $this->encoder = $encoder;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->decorated->supportsNormalization($data, $format);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        return $this->decorated->normalize($object, $format, $context);
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === User::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $operation = isset($context["collection_operation_name"]) ? $context["collection_operation_name"] : $context["item_operation_name"];
        switch ($operation) {
            case "post":
                $data["password"] = $this->encoder->encodePassword(new User, self::DEFAULT_PASSWORD);
                $data["username"] = $data["email"];
                break;
            case "put":
                $data["username"] = $data["email"];
                break;
        }

        return $this->decorated->denormalize($data, $class, $format, $context);
    }

    public function setSerializer(SerializerInterface $serializer)
    {
        if ($this->decorated instanceof SerializerAwareInterface) {
            $this->decorated->setSerializer($serializer);
        }
    }
}
