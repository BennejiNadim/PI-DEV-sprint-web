<?php


namespace agora\stockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder->add('ref_produit')->add('nom_produit')->add('marque')->add('categorie')->add('quantite_stock')->
    add('quantite_magasin')->add('prix_vente')->add('prix_achat')->add('image')->add('save',SubmitType::class);
}

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults(array(
        'data_class' => 'stockBundle\Entity\Produit'
    ));
}

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
{
    return 'stockbundle_produit';
}


}