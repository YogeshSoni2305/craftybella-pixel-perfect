import { Facebook, Instagram, Twitter, Youtube } from "lucide-react";
import { Button } from "@/components/ui/button";

const Footer = () => {
  return (
    <footer className="bg-primary text-primary-foreground">
      <div className="container mx-auto px-4 py-12">
        <div className="grid md:grid-cols-4 gap-8">
          {/* Brand Section */}
          <div className="md:col-span-1">
            <h3 className="text-2xl font-bold text-secondary mb-4">Craftybella</h3>
            <p className="text-primary-foreground/80 mb-4">
              Your one-stop destination for beautiful traditional and contemporary jewelry.
            </p>
            <div className="flex space-x-4">
              <Button variant="ghost" size="sm" className="text-primary-foreground hover:text-secondary">
                <Facebook size={20} />
              </Button>
              <Button variant="ghost" size="sm" className="text-primary-foreground hover:text-secondary">
                <Instagram size={20} />
              </Button>
              <Button variant="ghost" size="sm" className="text-primary-foreground hover:text-secondary">
                <Twitter size={20} />
              </Button>
              <Button variant="ghost" size="sm" className="text-primary-foreground hover:text-secondary">
                <Youtube size={20} />
              </Button>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="font-semibold mb-4 text-secondary">Quick Links</h4>
            <ul className="space-y-2">
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">About Us</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Contact</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Size Guide</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Shipping Info</a></li>
            </ul>
          </div>

          {/* Categories */}
          <div>
            <h4 className="font-semibold mb-4 text-secondary">Categories</h4>
            <ul className="space-y-2">
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Earrings</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Necklaces</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Rings</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Bracelets</a></li>
            </ul>
          </div>

          {/* Customer Service */}
          <div>
            <h4 className="font-semibold mb-4 text-secondary">Customer Service</h4>
            <ul className="space-y-2">
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Track Order</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Returns</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">FAQ</a></li>
              <li><a href="#" className="text-primary-foreground/80 hover:text-secondary transition-colors">Support</a></li>
            </ul>
          </div>
        </div>

        <div className="border-t border-primary-foreground/20 mt-8 pt-8 text-center">
          <p className="text-primary-foreground/60">
            © 2024 Craftybella. All rights reserved. | COD Available All Over INDIA
          </p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;