<?php

namespace App\Controller;

use App\Model\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * Retrieves a detailed cart containing Products objects and quantity, price totals
     * 
     * @param Cart $cart
     * @return Response
     */
    #[Route('/cart', name: 'cart')]
    public function index(Cart $cart): Response
    {
        $cartProducts = $cart->getDetails();

        return $this->render('cart/index.html.twig', [
            'cart' => $cartProducts['products'],
            'totalQuantity' => $cartProducts['totals']['quantity'],
            'totalPrice' =>$cartProducts['totals']['price']
        ]);
    }

    /**
     * Add an item to cart and increment the quantity
     * @param Cart $cart
     * @param int $id
     * @return Repsonse
     */
    #[Route('/cart/add/{id}', name: 'add_to_cart')]
    public function add(Cart $cart, int $id): Response
    {
        $cart->add($id);
        return $this->redirectToRoute('cart');
    }

    /**
     * Reduces the quantity for an item in the cart
     * @param Cart $cart
     * @param int $id
     * @return Repsonse
     */
    #[Route('/cart/remove/{id}', name: 'decrease_item')]
    public function decrease(Cart $cart, int $id): Response
    {
        $cart->decreaseItem($id);
        return $this->redirectToRoute('cart');
    }
    
    /**
     * Deletes a row of items from the shopping cart
     *
     * @param Cart $cart
     * @return Response
     */
    #[Route('/cart/delete/{id}', name: 'remove_cart_item')]
    public function removeItem(Cart $cart, int $id): Response
    {
        $cart->removeItem($id);
        return $this->redirectToRoute('cart');
    }

    /**
     * Empty cart
     *
     * @param Cart $cart
     * @return Response
     */
    #[Route('/cart/delete/', name: 'remove_cart')]
    public function remove(Cart $cart): Response
    {
        $cart->remove();
        return $this->redirectToRoute('product');
    }
}
