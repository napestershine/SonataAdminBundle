<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Form\Type\Operator;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType as FormChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class StringOperatorType extends AbstractType
{
    public const TYPE_STARTS_WITH = 1;
    public const TYPE_ENDS_WITH = 2;

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choice_translation_domain' => 'SonataAdminBundle',
            'choices' => [
                'label_type_starts_with' => self::TYPE_STARTS_WITH,
                'label_type_ends_with' => self::TYPE_ENDS_WITH,
            ],
        ]);
    }

    public function getParent()
    {
        return FormChoiceType::class;
    }

    public function getBlockPrefix()
    {
        return 'sonata_type_operator_contains';
    }
}
