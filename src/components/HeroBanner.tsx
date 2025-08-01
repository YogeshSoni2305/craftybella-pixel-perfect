import heroBanner from "@/assets/hero-banner.jpg";

const HeroBanner = () => {
  return (
    <section 
      className="relative bg-gradient-hero min-h-[500px] flex items-center justify-center overflow-hidden"
      style={{
        backgroundImage: `url(${heroBanner})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundBlendMode: 'overlay'
      }}
    >
      {/* Decorative Elements */}
      <div className="absolute inset-0 bg-gradient-to-r from-surface-cream/80 to-brand-cream/60"></div>
      
      {/* Left Content */}
      <div className="container mx-auto px-4 relative z-10">
        <div className="grid md:grid-cols-2 gap-8 items-center">
          <div className="text-left animate-fade-in">
            {/* Decorative Line */}
            <div className="flex items-center mb-6">
              <div className="w-16 h-px bg-secondary"></div>
              <div className="w-6 h-6 rounded-full border-4 border-secondary bg-accent mx-2"></div>
              <div className="w-16 h-px bg-secondary"></div>
            </div>
            
            <h1 className="text-5xl md:text-6xl font-bold text-secondary mb-4 leading-tight">
              Happy<br />
              Raksha Bandhan
            </h1>
            
            <p className="text-xl text-secondary/80 mb-6 font-medium">
              Celebrate The Bond of protection
            </p>
            
            <h2 className="text-3xl font-bold text-secondary mb-8">
              Craftybella
            </h2>
            
            {/* Decorative Line */}
            <div className="flex items-center">
              <div className="w-16 h-px bg-secondary"></div>
              <div className="w-6 h-6 rounded-full border-4 border-secondary bg-accent mx-2"></div>
              <div className="w-16 h-px bg-secondary"></div>
            </div>
          </div>
          
          {/* Right side can have additional content/decorations */}
          <div className="hidden md:block">
            <div className="relative">
              {/* Decorative elements can be added here */}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroBanner;