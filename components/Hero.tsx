import React from 'react';
import Button from './Button';
import { ArrowRight, CheckCircle, Terminal } from 'lucide-react';

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

          {/* Right Column: Tech Training Terminal */}
          <div className="hidden lg:block relative w-full max-w-lg ml-auto perspective-1000">
            {/* Card Container with glassmorphism */}
            <div className="relative rounded-xl overflow-hidden bg-[#0a192f]/80 border border-agile-primary/30 shadow-2xl backdrop-blur-md transform transition-transform hover:scale-[1.01] duration-500">
              
              {/* Terminal Header */}
              <div className="bg-[#020c1b] px-4 py-3 border-b border-white/5 flex items-center justify-between">
                <div className="flex space-x-2">
                  <div className="w-3 h-3 rounded-full bg-red-500/80"></div>
                  <div className="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                  <div className="w-3 h-3 rounded-full bg-green-500/80"></div>
                </div>
                <div className="text-[10px] font-mono text-gray-400 flex items-center">
                  <Terminal size={10} className="mr-1" />
                  user@agile611:~/training-schedule
                </div>
              </div>

              {/* Terminal Content */}
              <div className="p-6">
                <div className="mb-6 flex items-center text-agile-vibrant font-mono text-sm">
                  <span className="mr-2 text-agile-green">$</span>
                  <span className="typing-effect">list --upcoming --open</span>
                  <span className="ml-1 w-2 h-4 bg-agile-vibrant animate-pulse"></span>
                </div>

                <div className="space-y-3">
                    {/* Item 1 */}
                    <div className="flex items-center group cursor-pointer p-3 rounded-lg hover:bg-white/5 transition-all border border-transparent hover:border-agile-primary/20">
                      <div className="w-12 h-12 flex-shrink-0 rounded bg-agile-primary/10 border border-agile-primary/30 flex flex-col items-center justify-center text-agile-primary mr-4 group-hover:bg-agile-primary group-hover:text-white transition-all">
                          <span className="text-[10px] font-bold uppercase tracking-wider">Mar</span>
                          <span className="text-lg font-bold leading-none">15</span>
                      </div>
                      <div className="flex-grow">
                          <h4 className="text-white font-bold text-sm group-hover:text-agile-vibrant transition-colors">Scrum Master Certified</h4>
                          <p className="text-agile-turq text-xs font-mono mt-1">Online • 18:00 CET</p>
                      </div>
                      <div className="opacity-0 group-hover:opacity-100 transition-opacity -translate-x-2 group-hover:translate-x-0">
                          <ArrowRight size={16} className="text-white" />
                      </div>
                    </div>
                    
                    {/* Item 2 */}
                    <div className="flex items-center group cursor-pointer p-3 rounded-lg hover:bg-white/5 transition-all border border-transparent hover:border-agile-green/20">
                      <div className="w-12 h-12 flex-shrink-0 rounded bg-agile-green/10 border border-agile-green/30 flex flex-col items-center justify-center text-agile-green mr-4 group-hover:bg-agile-green group-hover:text-white transition-all">
                          <span className="text-[10px] font-bold uppercase tracking-wider">Mar</span>
                          <span className="text-lg font-bold leading-none">22</span>
                      </div>
                      <div className="flex-grow">
                          <h4 className="text-white font-bold text-sm group-hover:text-agile-turq transition-colors">DevOps Fundamentals</h4>
                          <p className="text-agile-turq text-xs font-mono mt-1">Online • 17:30 CET</p>
                      </div>
                       <div className="opacity-0 group-hover:opacity-100 transition-opacity -translate-x-2 group-hover:translate-x-0">
                          <ArrowRight size={16} className="text-white" />
                      </div>
                    </div>

                    {/* Item 3 */}
                    <div className="flex items-center group cursor-pointer p-3 rounded-lg hover:bg-white/5 transition-all border border-transparent hover:border-purple-500/20">
                      <div className="w-12 h-12 flex-shrink-0 rounded bg-purple-500/10 border border-purple-500/30 flex flex-col items-center justify-center text-purple-400 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-all">
                          <span className="text-[10px] font-bold uppercase tracking-wider">Abr</span>
                          <span className="text-lg font-bold leading-none">05</span>
                      </div>
                      <div className="flex-grow">
                          <h4 className="text-white font-bold text-sm group-hover:text-purple-300 transition-colors">SAFe 6.0 Agilist</h4>
                          <p className="text-agile-turq text-xs font-mono mt-1">Madrid • 09:00 CET</p>
                      </div>
                       <div className="opacity-0 group-hover:opacity-100 transition-opacity -translate-x-2 group-hover:translate-x-0">
                          <ArrowRight size={16} className="text-white" />
                      </div>
                    </div>
                </div>

                <div className="mt-6 pt-4 border-t border-white/5 text-center flex justify-between items-center text-[10px] text-gray-500 font-mono">
                    <span>STATUS: ONLINE</span>
                    <span className="hover:text-white cursor-pointer transition-colors">View all 12 courses...</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  );
};

export default Hero;