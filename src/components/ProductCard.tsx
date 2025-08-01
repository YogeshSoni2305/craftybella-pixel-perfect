import { Heart, Eye, ShoppingCart } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";

interface ProductCardProps {
  title: string;
  price: string;
  originalPrice?: string;
  discount?: string;
  image: string;
  isOutOfStock?: boolean;
}

const ProductCard = ({ 
  title, 
  price, 
  originalPrice, 
  discount, 
  image, 
  isOutOfStock = false 
}: ProductCardProps) => {
  return (
    <div className="group bg-white rounded-lg shadow-soft hover:shadow-medium transition-all duration-300 overflow-hidden relative">
      {/* Discount Badge */}
      {discount && (
        <Badge className="absolute top-2 left-2 z-10 bg-secondary text-white font-semibold">
          -{discount}
        </Badge>
      )}
      
      {/* Out of Stock Badge */}
      {isOutOfStock && (
        <Badge className="absolute top-2 right-2 z-10 bg-destructive text-white">
          Sold out
        </Badge>
      )}

      {/* Product Image */}
      <div className="relative overflow-hidden">
        <img
          src={image}
          alt={title}
          className="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300"
        />
        
        {/* Quick Actions Overlay */}
        <div className="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
          <div className="flex space-x-2 transform translate-y-10 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
            <Button size="sm" variant="secondary" className="rounded-full">
              <Eye size={16} />
            </Button>
            <Button size="sm" variant="secondary" className="rounded-full">
              <Heart size={16} />
            </Button>
          </div>
        </div>
      </div>

      {/* Product Info */}
      <div className="p-4">
        <h3 className="font-semibold text-foreground mb-2 line-clamp-2 group-hover:text-primary transition-colors">
          {title}
        </h3>
        
        <div className="flex items-center space-x-2 mb-3">
          <span className="text-lg font-bold text-secondary">{price}</span>
          {originalPrice && (
            <span className="text-sm text-muted-foreground line-through">{originalPrice}</span>
          )}
        </div>

        <div className="flex space-x-2">
          {isOutOfStock ? (
            <Button className="flex-1" variant="outline" disabled>
              Read more
            </Button>
          ) : (
            <Button className="flex-1 bg-primary hover:bg-primary-light">
              <ShoppingCart size={16} className="mr-2" />
              Add to cart
            </Button>
          )}
        </div>
      </div>
    </div>
  );
};

export default ProductCard;