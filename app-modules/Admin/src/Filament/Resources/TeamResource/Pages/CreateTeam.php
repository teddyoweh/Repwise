<?php

declare(strict_types=1);

namespace Repwise\Admin\Filament\Resources\TeamResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Repwise\Admin\Filament\Resources\TeamResource;

final class CreateTeam extends CreateRecord
{
    protected static string $resource = TeamResource::class;
}
