<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CARET_UP'|'CARET_DOWN'|'PLUS'|'MINUS'|'ARROW_UP'|'ARROW_DOWN'|'ARROW_LEFT'|'ARROW_UP_LEFT'|'ARROW_DOWN_LEFT'|'ARROW_RIGHT'|'ARROW_UP_RIGHT'|'ARROW_DOWN_RIGHT'|'FACE_UP'|'FACE_DOWN'|'FACE_FLAT'|'ONE_BAR'|'TWO_BAR'|'THREE_BAR'|'CIRCLE'|'TRIANGLE'|'SQUARE'|'FLAG'|'THUMBS_UP'|'THUMBS_DOWN'|'CHECKMARK'|'X'|null $Icon
 * @property string|null $UnicodeIcon
 */
class ConditionalFormattingCustomIconOptions extends Shape
{
    /**
     * @param array{
     *     Icon?: 'CARET_UP'|'CARET_DOWN'|'PLUS'|'MINUS'|'ARROW_UP'|'ARROW_DOWN'|'ARROW_LEFT'|'ARROW_UP_LEFT'|'ARROW_DOWN_LEFT'|'ARROW_RIGHT'|'ARROW_UP_RIGHT'|'ARROW_DOWN_RIGHT'|'FACE_UP'|'FACE_DOWN'|'FACE_FLAT'|'ONE_BAR'|'TWO_BAR'|'THREE_BAR'|'CIRCLE'|'TRIANGLE'|'SQUARE'|'FLAG'|'THUMBS_UP'|'THUMBS_DOWN'|'CHECKMARK'|'X'|null,
     *     UnicodeIcon?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
