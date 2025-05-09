<?php

declare(strict_types=1);

namespace Repwise\Admin\Filament\Resources\TaskResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Repwise\Admin\Filament\Resources\TaskResource;

final class CreateTask extends CreateRecord
{
    protected static string $resource = TaskResource::class;
}
