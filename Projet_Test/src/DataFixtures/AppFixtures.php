<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use App\Entity\CarteBancaire;
use App\Entity\CompteBancaire;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /************ Utilisateur 1 ************/
        $utilisateur = new Utilisateur();
        $utilisateur->setNom('Ricciardo');
        $utilisateur->setPrenom('Daniel');
        $utilisateur->setDateNaissance(new \DateTime('07/01/1989'));
        $utilisateur->setEmail('honey.badger@fia.com');

        //Deux comptes
        $carteBancaire = new CarteBancaire();
        $carteBancaire->setNumero('1111222233334444');
        $carteBancaire->setStatut('activé');
        $carteBancaire->setDateExpiration(new \DateTime("07/01/2023"));

        $manager->persist($utilisateur);
        $manager->persist($carteBancaire);

        $compteBancaire = new CompteBancaire();
        $compteBancaire->setIBAN('FR0610096000505791597916J57');
        $compteBancaire->setBIC('BIARFRPP');
        $compteBancaire->setRefIdPartenaire('AFH48921Z9V1R9EDEZ');
        $compteBancaire->setBalance(5000);
        $compteBancaire->setCarteBancaire($carteBancaire);
        $compteBancaire->setUtilisateur($utilisateur);

        $manager->persist($compteBancaire);

        $carteBancaire = new CarteBancaire();
        $carteBancaire->setNumero('2222444488886666');
        $carteBancaire->setStatut('activé');
        $carteBancaire->setDateExpiration(new \DateTime("02/01/2023"));

        $manager->persist($carteBancaire);

        $compteBancaire = new CompteBancaire();
        $compteBancaire->setIBAN('FR9514508000708868637432I14');
        $compteBancaire->setBIC('CITIFRPP');
        $compteBancaire->setRefIdPartenaire('AFH48921Z9V1R9EDEZ');
        $compteBancaire->setBalance(450.59);
        $compteBancaire->setCarteBancaire($carteBancaire);
        $compteBancaire->setUtilisateur($utilisateur);

        $manager->persist($compteBancaire);

        /************ Utilisateur 2 ************/

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('Gasly');
        $utilisateur->setPrenom('Pierre');
        $utilisateur->setDateNaissance(new \DateTime('02/07/1996'));
        $utilisateur->setEmail('pierrot-monza2020@fia.com');
        //Un compte

        $carteBancaire = new CarteBancaire();
        $carteBancaire->setNumero('3333444455556666');
        $carteBancaire->setStatut('activé');
        $carteBancaire->setDateExpiration(new \DateTime("07/01/2024"));

        $manager->persist($utilisateur);
        $manager->persist($carteBancaire);

        $compteBancaire = new CompteBancaire();
        $compteBancaire->setIBAN('FR4617569000509228564819G19');
        $compteBancaire->setBIC('BIARFRPP');
        $compteBancaire->setRefIdPartenaire('FEHI569VEZ419VRZ15');
        $compteBancaire->setBalance(15903.48);
        $compteBancaire->setCarteBancaire($carteBancaire);
        $compteBancaire->setUtilisateur($utilisateur);

        $manager->persist($compteBancaire);

        /************ Utilisateur 3 ************/

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('Vettel');
        $utilisateur->setPrenom('Sebastian');
        $utilisateur->setDateNaissance(new \DateTime('07/03/1987'));
        $utilisateur->setEmail('babyschumy@fia.com');
        //Un compte

        $carteBancaire = new CarteBancaire();
        $carteBancaire->setNumero('4444111155553333');
        $carteBancaire->setStatut('activé');
        $carteBancaire->setDateExpiration(new \DateTime("02/01/2023"));

        $manager->persist($utilisateur);
        $manager->persist($carteBancaire);

        $compteBancaire = new CompteBancaire();
        $compteBancaire->setIBAN('FR2614508000306591262193O82');
        $compteBancaire->setBIC('BYLAFRPP');
        $compteBancaire->setRefIdPartenaire('FEHI569VEZ419VRZ15');
        $compteBancaire->setBalance(15903.48);
        $compteBancaire->setCarteBancaire($carteBancaire);
        $compteBancaire->setUtilisateur($utilisateur);

        $manager->persist($compteBancaire);

        /************ Utilisateur 4 ************/

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('Alonso');
        $utilisateur->setPrenom('Fernando');
        $utilisateur->setDateNaissance(new \DateTime('07/29/1981'));
        $utilisateur->setEmail('nando@fia.com');
        //Un compte

        $carteBancaire = new CarteBancaire();
        $carteBancaire->setNumero('1111999955553333');
        $carteBancaire->setStatut('activé');
        $carteBancaire->setDateExpiration(new \DateTime("08/01/2024"));

        $manager->persist($utilisateur);
        $manager->persist($carteBancaire);

        $compteBancaire = new CompteBancaire();
        $compteBancaire->setIBAN('FR3114508000508465637544O92');
        $compteBancaire->setBIC('BFCOFRPP');
        $compteBancaire->setRefIdPartenaire('VEFZRHP5489VZ19D41');
        $compteBancaire->setBalance(0);
        $compteBancaire->setCarteBancaire($carteBancaire);
        $compteBancaire->setUtilisateur($utilisateur);

        $manager->persist($compteBancaire);

        /************ Utilisateur 5 ************/

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('Lando');
        $utilisateur->setPrenom('Norris');
        $utilisateur->setDateNaissance(new \DateTime('11/13/1999'));
        $utilisateur->setEmail('nono@fia.com');
        //Un compte

        $carteBancaire = new CarteBancaire();
        $carteBancaire->setNumero('5555999966663333');
        $carteBancaire->setStatut('volée');
        $carteBancaire->setDateExpiration(new \DateTime("09/01/2024"));

        $manager->persist($utilisateur);
        $manager->persist($carteBancaire);

        $compteBancaire = new CompteBancaire();
        $compteBancaire->setIBAN('FR2017569000302611817866J85');
        $compteBancaire->setBIC('BPELFR2Y');
        $compteBancaire->setRefIdPartenaire('TI1685O4VD4894JP7H6');
        $compteBancaire->setBalance(0);
        $compteBancaire->setCarteBancaire($carteBancaire);
        $compteBancaire->setUtilisateur($utilisateur);

        $manager->persist($compteBancaire);

        /************ Utilisateur 6 ************/

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('Grosjean');
        $utilisateur->setPrenom('Romain');
        $utilisateur->setDateNaissance(new \DateTime('04/17/1986'));
        $utilisateur->setEmail('r8g@fia.com');
        $dateSuppr = new \DateTime();
        $utilisateur->setDateSuppr($dateSuppr);
        //Un compte

        $carteBancaire = new CarteBancaire();
        $carteBancaire->setNumero('2222999977775555');
        $carteBancaire->setStatut('fermée');
        $carteBancaire->setDateExpiration(new \DateTime("04/01/2022"));
        $carteBancaire->setDateSuppr($dateSuppr);

        $manager->persist($utilisateur);
        $manager->persist($carteBancaire);

        $compteBancaire = new CompteBancaire();
        $compteBancaire->setIBAN('FR2017569000302611817866J85');
        $compteBancaire->setBIC('BPELFR2Y');
        $compteBancaire->setRefIdPartenaire('TI1685O4VD4894JP7H6');
        $compteBancaire->setBalance(0);
        $compteBancaire->setCarteBancaire($carteBancaire);
        $compteBancaire->setUtilisateur($utilisateur);
        $compteBancaire->setDateSuppr($dateSuppr);

        $manager->persist($compteBancaire);

        $manager->flush();

    }
}
