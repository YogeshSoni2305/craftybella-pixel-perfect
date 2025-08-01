import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";

const Newsletter = () => {
  return (
    <section className="bg-gradient-festive py-16">
      <div className="container mx-auto px-4">
        <div className="max-w-2xl mx-auto text-center">
          <h2 className="text-3xl font-bold text-white mb-4">
            Stay Updated with Latest Collections
          </h2>
          <p className="text-white/90 mb-8 text-lg">
            Subscribe to get special offers, free giveaways, and exclusive deals.
          </p>
          
          <div className="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <Input
              type="email"
              placeholder="Enter your email"
              className="flex-1 bg-white border-0 text-foreground placeholder:text-muted-foreground"
            />
            <Button className="bg-white text-secondary hover:bg-white/90 font-semibold px-8">
              Subscribe
            </Button>
          </div>
          
          <p className="text-white/70 text-sm mt-4">
            No spam, unsubscribe at any time.
          </p>
        </div>
      </div>
    </section>
  );
};

export default Newsletter;