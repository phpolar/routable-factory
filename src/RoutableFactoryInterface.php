<?php

declare(strict_types=1);

namespace Phpolar\RoutableFactory;

use Phpolar\Routable\RoutableInterface;

/**
 * Provides a type-safe way to provide
 * route targets to the route map that will
 * not be instantiated immediately.
 *
 * Instantiating route targets on demand
 * can improve performance by reducing
 * memory usage.
 */
interface RoutableFactoryInterface
{
    public function createInstance(): RoutableInterface;
}
