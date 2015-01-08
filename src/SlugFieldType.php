<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class SlugFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Slug
 */
class SlugFieldType extends FieldType
{

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.field_type.slug::input';

    /**
     * Slugify the value before setting it to the entry.
     *
     * @param $value
     * @return mixed|string
     */
    public function mutate($value)
    {
        return app('Illuminate\Support\Str')->slug($value, array_get($this->config, 'separator', '_'));
    }
}
