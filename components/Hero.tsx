import React from 'react';
import Button from './Button';
import { ArrowRight, CheckCircle } from 'lucide-react';

const Hero: React.FC = () => {
  return (
    <section id="hero" className="relative bg-agile-deep min-h-[90vh] flex items-center overflow-hidden">
      {/* Background Decor */}
      <div className="absolute inset-0 overflow-hidden">
        <div className="absolute -top-1/2 -right-1/4 w-[800px] h-[800px] bg-agile-primary rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse"></div>
        <div className="absolute -bottom-1/2 -left-1/4 w-[600px] h-[600px] bg-agile-turq rounded-full mix-blend-screen filter blur-[100px] opacity-10"></div>
      </div>

      <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20 pt-32">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          
          <div className="space-y-8">
            <div className="inline-flex items-center space-x-2 bg-agile-primary/20 rounded-full px-4 py-1.5 border border-agile-primary/30">
              <span className="flex h-2 w-2 rounded-full bg-agile-vibrant"></span>
              <span className="text-sm font-semibold text-agile-vibrant tracking-wide uppercase">
                Agile Transformation
              </span>
            </div>

            <h1 className="font-heading text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-tight">
              Hacemos el trabajo más <span className="text-transparent bg-clip-text bg-gradient-to-r from-agile-turq to-agile-vibrant">Humano</span> y Eficiente
            </h1>

            <p className="text-xl text-gray-300 max-w-lg font-sans leading-relaxed">
              Ayudamos a personas y organizaciones a mejorar sus formas de trabajar mediante innovación, calidad y talento humano.
            </p>

            <div className="flex flex-col sm:flex-row gap-4 pt-4">
              <Button variant="vibrant" className="group">
                Nuestros Servicios
                <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
              </Button>
              <Button variant="outline" className="border-white text-white hover:bg-white hover:text-agile-deep">
                Contáctanos
              </Button>
            </div>

            <div className="pt-8 flex flex-wrap gap-6 text-gray-400 text-sm font-medium">
              <div className="flex items-center">
                <CheckCircle className="w-5 h-5 text-agile-green mr-2" />
                DevOps & Cloud
              </div>
              <div className="flex items-center">
                <CheckCircle className="w-5 h-5 text-agile-green mr-2" />
                Agile Coaching
              </div>
              <div className="flex items-center">
                <CheckCircle className="w-5 h-5 text-agile-green mr-2" />
                Ciberseguridad
              </div>
            </div>
          </div>

          <div className="hidden lg:block relative">
             {/* Abstract Geometric Visualization of "Structure + Humanity" */}
             <div className="relative rounded-2xl overflow-hidden shadow-2xl bg-gradient-to-br from-agile-primary to-agile-deep border border-white/10 aspect-square flex items-center justify-center p-8">
                <div className="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
                
                {/* Floating cards simulation */}
                <div className="absolute top-10 right-10 w-48 h-32 bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-4 shadow-lg transform rotate-6 animate-[bounce_6s_infinite]">
                    <div className="h-2 w-1/3 bg-agile-vibrant rounded mb-3"></div>
                    <div className="h-2 w-3/4 bg-white/30 rounded mb-2"></div>
                    <div className="h-2 w-1/2 bg-white/30 rounded"></div>
                </div>
                
                <div className="absolute bottom-20 left-10 w-56 h-40 bg-white/5 backdrop-blur-md rounded-xl border border-white/10 p-4 shadow-lg transform -rotate-3">
                    <div className="flex items-center space-x-3 mb-4">
                         <div className="w-8 h-8 rounded-full bg-agile-turq"></div>
                         <div className="h-2 w-20 bg-white/40 rounded"></div>
                    </div>
                    <div className="space-y-2">
                        <div className="h-2 w-full bg-white/20 rounded"></div>
                        <div className="h-2 w-full bg-white/20 rounded"></div>
                        <div className="h-2 w-2/3 bg-white/20 rounded"></div>
                    </div>
                </div>

                {/* Central Focus */}
                <div className="relative z-10 text-center">
                    <span className="block font-heading text-8xl font-bold text-white/5 tracking-widest">A611</span>
                </div>
             </div>
          </div>

        </div>
      </div>
    </section>
  );
};

export default Hero;