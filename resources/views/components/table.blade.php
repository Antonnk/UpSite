<?php
/**
 * @var \Support\View\Blueprints\TableBlueprint $blueprint
 * @var \Support\View\Blueprints\ColumnBlueprint $column
 */
?>

<x-section>
@if($blueprint->isEmpty())
    <p>Empty</p>
@else
        <table class="min-w-full">
                <thead>
                    <tr>
                        @foreach($blueprint->getColumns() as $column)
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ $column->getTitle() }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($blueprint->getData() as $row)
                        <tr>
                            @foreach($blueprint->getColumns() as $column)
                                @if($column->isType(\Support\View\Blueprints\ColumnBlueprint::TYPE_MONOTYPE))
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm font-mono tracking-wide leading-5 text-gray-900">
                                            @if($column->link instanceof Closure)
                                                <a class="underline" href="{{ call_user_func($column->link, $row) }}">{{ $row[(string)$column] }}</a>
                                            @else
                                                {{ $row[(string)$column] }}
                                            @endif
                                        </div>
                                    </td>
                                @elseif($column->isType(\Support\View\Blueprints\ColumnBlueprint::TYPE_DATETIME))
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            @if($column->link instanceof Closure)
                                                <a class="underline" href="{{ call_user_func($column->link, $row) }}">{{ \Carbon\Carbon::parse($row[(string)$column])->toFormattedDateString() }}</a>
                                            @else
                                                {{ \Carbon\Carbon::parse($row[(string)$column])->toFormattedDateString() }}
                                            @endif
                                        </div>
                                    </td>
                                @else
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            @if($column->link instanceof Closure)
                                                <a class="underline" href="{{ call_user_func($column->link, $row) }}">{{ $row[(string)$column] }}</a>
                                            @else
                                                {{ $row[(string)$column] }}
                                            @endif
                                        </div>
                                    </td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
@endif
</x-section>
