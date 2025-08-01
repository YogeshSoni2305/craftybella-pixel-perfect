import jewelryCollection from "@/assets/jewelry-collection.jpg";
import jhumkaSample from "@/assets/jhumka-sample.jpg";

const CategoryNavigation = () => {
  const categories = [
    { name: "Rakshabandhan", image: jewelryCollection },
    { name: "Indian Jhumka's", image: jhumkaSample },
    { name: "Combo's", image: jewelryCollection },
    { name: "Western Earrings", image: jhumkaSample },
    { name: "Aura of Gold", image: jewelryCollection },
    { name: "Necklace", image: jhumkaSample },
    { name: "Rings", image: jewelryCollection },
    { name: "Anklet's", image: jhumkaSample },
    { name: "Bracelets", image: jewelryCollection },
    { name: "Add-Ons", image: jhumkaSample },
  ];

  return (
    <div className="bg-white py-6">
      <div className="container mx-auto px-4">
        <div className="flex justify-center space-x-8 overflow-x-auto pb-4">
          {categories.map((category, index) => (
            <div key={index} className="flex-shrink-0 text-center group cursor-pointer">
              <div className="w-20 h-20 rounded-full overflow-hidden mx-auto mb-2 border-2 border-transparent group-hover:border-primary transition-all duration-300 shadow-soft group-hover:shadow-medium">
                <img
                  src={category.image}
                  alt={category.name}
                  className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <span className="text-sm font-medium text-foreground group-hover:text-primary transition-colors">
                {category.name}
              </span>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default CategoryNavigation;