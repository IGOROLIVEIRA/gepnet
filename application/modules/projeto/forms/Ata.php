<?php

class Projeto_Form_Ata extends App_Form_FormAbstract
{

    public function init()
    {
        $this->setOptions(array(
            'method' => 'post',
            'id' => 'form-ata',
            'elements' => array(
                'idata' => array(
                    'hidden',
                    array(
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array('Digits'),
                    )
                ),
                'idprojeto' => array(
                    'hidden',
                    array(
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array('Digits'),
                    )
                ),
                'desassunto' => array(
                    'text',
                    array(
                        'label' => 'Assunto',
                        'required' => true,
                        'maxlength' => '100',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array('NotEmpty', array('StringLength', false, array(0, 100))),
                        'attribs' => array(
                            'class' => 'span5',
                            'maxlength' => '100',
                            'data-rule-required' => true,
                            'data-rule-minlength' => 5,
                            'data-rule-maxlength' => 100,
                            'placeholder' => 'Informe o assunto do projeto',
                        ),
                    )
                ),
                'datata' => array(
                    'text',
                    array(
                        'label' => 'Data Ata',
                        'required' => true,
                        'maxlength' => '10',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array('Date'),
                        'attribs' => array(
                            'class' => 'span2 mask-date',
                            'maxlength' => '10',
                            'data-rule-maxlength' => 10,
                            'data-rule-required' => true,
                            'data-rule-dateITA' => true,
                        ),
                    )
                ),
                'hrreuniao' => array(
                    'text',
                    array(
                        'label' => 'Hora da Reuni??o',
                        'required' => true,
                        'maxlength' => '8',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array('NotEmpty', array('StringLength', false, array(0, 8))),
                        'attribs' => array(
                            'class' => 'span2 mask-hora',
                            'maxlength' => '8',
                            'data-rule-required' => true,
                            'data-rule-maxlength' => 8,
                            'data-rule-minlength' => 8,
                            'data-rule-hora' => true,
                            'placeholder' => 'HH:MM:SS',
                        ),
                    )
                ),
                'deslocal' => array(
                    'text',
                    array(
                        'label' => 'Local',
                        'required' => true,
                        'maxlength' => '100',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array(array('StringLength', false, array(0, 100))),
                        'attribs' => array(
                            'class' => 'span3',
                            'maxlength' => '100',
                            'data-rule-maxlength' => 100,
                            'data-rule-required' => true,
                            'placeholder' => 'Local da reuni??o',
                        ),
                    )
                ),
                'desparticipante' => array(
                    'textarea',
                    array(
                        'label' => 'Participantes',
                        'required' => true,
                        'maxlength' => '4000',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array(array('StringLength', false, array(0, 4000))),
                        'attribs' => array(
                            'class' => 'span10',
                            'rows' => '6',
                            'data-rule-required' => true,
                            'data-rule-maxlength' => 4000,
                            'placeholder' => 'Favor informar: Nome Completo, Cargo, Posi????o na Organiza????o, Telefone e e-mail.',
                        ),
                    )
                ),
                'despontodiscutido' => array(
                    'textarea',
                    array(
                        'label' => 'Ponto discutido',
                        'required' => true,
                        'maxlength' => '4000',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array(array('StringLength', false, array(0, 4000))),
                        'attribs' => array(
                            'class' => 'span10',
                            'rows' => '6',
                            'data-rule-required' => true,
                            'data-rule-maxlength' => 4000,
                            'placeholder' => 'Informe dos pontos discutidos.',
                        ),
                    )
                ),
                'desdecisao' => array(
                    'textarea',
                    array(
                        'label' => 'Decis??o',
                        'required' => true,
                        'maxlength' => '4000',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array(array('StringLength', false, array(0, 4000))),
                        'attribs' => array(
                            'class' => 'span10',
                            'rows' => '6',
                            'data-rule-required' => true,
                            'data-rule-maxlength' => 4000,
                            'placeholder' => 'Informe qual foi decis??o da reuni??o.',
                        ),
                    )
                ),
                'despontoatencao' => array(
                    'textarea',
                    array(
                        'label' => 'Ponto de aten????o',
                        'required' => true,
                        'maxlength' => '4000',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array(array('StringLength', false, array(0, 4000))),
                        'attribs' => array(
                            'class' => 'span10',
                            'rows' => '6',
                            'data-rule-required' => true,
                            'data-rule-maxlength' => 4000,
                            'placeholder' => 'Informe sobre os pontos de aten????o.',
                        ),
                    )
                ),
                'desproximopasso' => array(
                    'textarea',
                    array(
                        'label' => 'Pr??ximo passo',
                        'required' => true,
                        'maxlength' => '4000',
                        'filters' => array('StringTrim', 'StripTags'),
                        'validators' => array(array('StringLength', false, array(0, 4000))),
                        'attribs' => array(
                            'class' => 'span10',
                            'rows' => '6',
                            'data-rule-required' => true,
                            'data-rule-maxlength' => 4000,
                            'placeholder' => 'Favor informar: Data, Nome do Respons??vel e descrever o pr??ximo passo.',
                        ),
                    )
                ),
            )
        ));
    }
}
