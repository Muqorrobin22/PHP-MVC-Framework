<?php

namespace app\core\form;

use app\core\Model;

class Field
{
    public Model $model;
    public string $attribute;

    public string $typeInput = "text";

    public function __construct(Model $model, $attribute, $typeInput = "text")
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->typeInput = $typeInput;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return sprintf('
            <label for="%s" class="form-label">%s</label>
            <input type="%s" class="form-control %s" value="%s"  name="%s">
            <div class="invalid-feedback">
                   %s
             </div>
        ',
            $this->attribute,
            $this->model->getLabel($this->attribute),
            $this->typeInput,
            $this->model->hasError($this->attribute) ? "is-invalid" : "",
            $this->model->{$this->attribute},
            $this->attribute,
            $this->model->getFirstError($this->attribute)
        );
    }
}