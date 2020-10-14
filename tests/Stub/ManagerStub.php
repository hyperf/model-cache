<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest\ModelCache\Stub;

use Hyperf\Database\Model\Model;

class ManagerStub extends \Hyperf\ModelCache\Manager
{
    public function formatModel(Model $model): array
    {
        return parent::formatModel($model);
    }
}
