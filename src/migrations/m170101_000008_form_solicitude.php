<?php

class m170101_000008_form_solicitude
    extends tecnocen\formgenerator\migrations\BaseTable
{
    /**
     * @inheritdoc
     */
    public function getTableName()
    {
        return 'formgenerator_form_solicitude';
    }

    /**
     * @inheritdoc
     */
    public function columns()
    {
        return [
            'id' => $this->primaryKey(),
            'form_id' => $this->normalKey(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function foreignKeys()
    {
        return ['form_id' => 'formgenerator_form'];
    }
}
