<?php

namespace Office365\Runtime;


class InvokePostMethodQuery extends InvokeMethodQuery
{

    /**
     * @param ClientObject $bindingType
     * @param string $methodName
     * @param array $methodParameters
     * @param string $parameterName
     * @param string|ClientObject $parameterType
     */
    public function __construct($bindingType, $methodName = null, $methodParameters=null, $parameterName=null, $parameterType=null)
    {
        parent::__construct($bindingType,$methodName, $methodParameters);
        $this->ParameterName = $parameterName;
        $this->ParameterType = $parameterType;
    }

    /**
     * @var ClientObject $ParameterType
     */
    public $ParameterType;

    /**
     * @var string
     */
    public $ParameterName;
}
