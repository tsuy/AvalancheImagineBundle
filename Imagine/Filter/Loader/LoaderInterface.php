<?php

namespace Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader;

use Imagine\Image\ImageInterface;

interface LoaderInterface
{
    /**
     * @param array $options
     *
     * @return Imagine\Filter\FilterInterface
     */
    function load(ImageInterface $imageInterface, array $options = array());
}
