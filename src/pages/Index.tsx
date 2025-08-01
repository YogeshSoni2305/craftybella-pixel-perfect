import AnnouncementBar from "@/components/AnnouncementBar";
import Header from "@/components/Header";
import CategoryNavigation from "@/components/CategoryNavigation";
import HeroBanner from "@/components/HeroBanner";
import ProductSection from "@/components/ProductSection";
import Newsletter from "@/components/Newsletter";
import Footer from "@/components/Footer";
import PromoBanner from "@/components/PromoBanner";

// Import product images
import giftHamper from "@/assets/gift-hamper.jpg";
import earringsSet from "@/assets/earrings-set.jpg";
import jewelryCollection from "@/assets/jewelry-collection.jpg";
import jhumkaSample from "@/assets/jhumka-sample.jpg";

const Index = () => {
  // Sample product data based on CraftyBella website
  const rakshabandhanProducts = [
    {
      id: "1",
      title: "Royal Rakshabandhan Gift Hamper",
      price: "₹ 649.00",
      originalPrice: "₹ 1,349.00",
      discount: "52%",
      image: giftHamper,
    },
    {
      id: "2", 
      title: "Rakshabandhan Edition with 9 Oxidised Beauties & Chocolate",
      price: "₹ 699.00",
      originalPrice: "₹ 1,599.00",
      discount: "56%",
      image: earringsSet,
    },
    {
      id: "3",
      title: "Raakhi Sparkle Set – 12 Piece Oxidised Gift Hamper",
      price: "₹ 799.00", 
      originalPrice: "₹ 1,799.00",
      discount: "56%",
      image: giftHamper,
    },
    {
      id: "4",
      title: "Rakshabandhan Luxury Jewellery Gift Hamper",
      price: "₹ 849.00",
      originalPrice: "₹ 1,999.00", 
      discount: "58%",
      image: jewelryCollection,
    },
    {
      id: "5",
      title: "Rakshabandhan Queen's Gift Hamper",
      price: "₹ 1,249.00",
      originalPrice: "₹ 2,799.00",
      discount: "55%",
      image: giftHamper,
      isOutOfStock: true,
    },
  ];

  const premiumCombos = [
    {
      id: "6",
      title: "The Royal Traditional Combo Hamper",
      price: "₹ 599.00",
      originalPrice: "₹ 1,299.00",
      discount: "54%",
      image: jewelryCollection,
    },
    {
      id: "7",
      title: "Lavish Jewellery Combo Hamper For Her With Personalised Card!",
      price: "₹ 499.00",
      originalPrice: "₹ 899.00", 
      discount: "44%",
      image: giftHamper,
    },
    {
      id: "8",
      title: "Premium Royal Traditional Combo Hamper by Craftybella",
      price: "₹ 999.00",
      originalPrice: "₹ 1,999.00",
      discount: "50%",
      image: earringsSet,
    },
    {
      id: "9",
      title: "Luxury Jewellery Combo hamper With Ferrero Rocher for Her!",
      price: "₹ 799.00",
      originalPrice: "₹ 1,999.00",
      discount: "60%",
      image: jewelryCollection,
    },
    {
      id: "10",
      title: "Elegant Korean Jewellery Gift Hamper Perfect Gift!",
      price: "₹ 1,099.00",
      originalPrice: "₹ 2,799.00",
      discount: "61%", 
      image: giftHamper,
      isOutOfStock: true,
    },
  ];

  const buyAny10Products = [
    {
      id: "11",
      title: "Black gem work oxidised heavy jhumka",
      price: "₹ 99.00",
      originalPrice: "₹ 399.00",
      discount: "75%",
      image: jhumkaSample,
    },
    {
      id: "12",
      title: "Peacock Grace oxidise Jhumka", 
      price: "₹ 99.00",
      originalPrice: "₹ 199.00",
      discount: "50%",
      image: earringsSet,
    },
    {
      id: "13",
      title: "Oxidise circle drop quality jhumka",
      price: "₹ 99.00",
      originalPrice: "₹ 229.00",
      discount: "57%",
      image: jhumkaSample,
    },
    {
      id: "14",
      title: "Sunflower Oxidised Jhumka",
      price: "₹ 99.00",
      originalPrice: "₹ 199.00",
      discount: "50%",
      image: earringsSet,
    },
    {
      id: "15",
      title: "Pearl Swirl German Silver Jhumki Earrings",
      price: "₹ 99.00",
      originalPrice: "₹ 199.00",
      discount: "50%",
      image: jhumkaSample,
    },
  ];

  return (
    <div className="min-h-screen bg-background">
      {/* Top Announcement Bar */}
      <AnnouncementBar />
      
      {/* Header */}
      <Header />
      
      {/* Promo Banner */}
      <PromoBanner />
      
      {/* Category Navigation */}
      <CategoryNavigation />
      
      {/* Hero Banner */}
      <HeroBanner />
      
      {/* Product Sections */}
      <ProductSection
        title="Rakshabandhan"
        subtitle="Thoughtful gift to your sister"
        products={rakshabandhanProducts}
        viewAllLink="/collections/rakshabandhan-special"
      />
      
      <ProductSection
        title="Premium Combos"
        subtitle="Make Her Smile with These All-in-One Gift Boxes"
        products={premiumCombos}
        viewAllLink="/collections/earrings-jhumkas-combos"
      />
      
      <ProductSection
        title="Buy Any 10 @649"
        subtitle="Your Faves, Your Combo, One Price"
        products={buyAny10Products}
        viewAllLink="/collections/buy-any-10-649"
      />
      
      {/* Newsletter */}
      <Newsletter />
      
      {/* Footer */}
      <Footer />
    </div>
  );
};

export default Index;
