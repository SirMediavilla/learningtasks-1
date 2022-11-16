class Product{
    public void productPrice() {
        System.out.println("Current Product Prices:");
    }
}

class Shampoo extends Product{
    public void productPrice() {
        System.out.println("Shampoo - P. 40");
    }
}

class Toothpaste extends Product{
    public void productPrice() {
        System.out.println("Toothpaste - P. 50");
    }
}

class Main {
    public static void main(String[] args) {
        Product myProduct = new Product();
        Product myShampoo = new Shampoo();
        Product myToothpaste = new Toothpaste();

        myProduct.productPrice();
        myShampoo.productPrice();
        myToothpaste.productPrice();
    }
}