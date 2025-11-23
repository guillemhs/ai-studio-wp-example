import React from 'react';
import { APP_NAME } from '../constants';
import { Twitter, Linkedin, Mail, MapPin } from 'lucide-react';

const Footer: React.FC = () => {
  return (
    <footer id="contact" className="bg-agile-deep text-white pt-20 pb-10">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
          
          <div className="col-span-1 md:col-span-2">
            <h3 className="font-heading font-extrabold text-3xl mb-6 tracking-tight">
              {APP_NAME}
            </h3>
            <p className="text-gray-400 max-w-sm mb-6 leading-relaxed">
              Transformamos organizaciones potenciando su talento humano y asegurando su infraestructura tecnológica.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-agile-vibrant transition-colors">
                <Twitter size={20} />
              </a>
              <a href="#" className="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-agile-vibrant transition-colors">
                <Linkedin size={20} />
              </a>
            </div>
          </div>

          <div>
            <h4 className="font-heading font-bold text-lg mb-6 text-agile-turq">Servicios</h4>
            <ul className="space-y-4 text-gray-400">
              <li><a href="#" className="hover:text-white transition-colors">Formación Ágil</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Consultoría</a></li>
              <li><a href="#" className="hover:text-white transition-colors">DevOps</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Ciberseguridad</a></li>
            </ul>
          </div>

          <div>
            <h4 className="font-heading font-bold text-lg mb-6 text-agile-turq">Contacto</h4>
            <ul className="space-y-4 text-gray-400">
              <li className="flex items-start">
                <Mail size={18} className="mr-3 mt-1 text-agile-vibrant" />
                <span>contacto@agile611.com</span>
              </li>
              <li className="flex items-start">
                <MapPin size={18} className="mr-3 mt-1 text-agile-vibrant" />
                <span>Madrid, España</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
          <p>&copy; {new Date().getFullYear()} {APP_NAME}. Todos los derechos reservados.</p>
          <div className="flex space-x-6 mt-4 md:mt-0">
            <a href="#" className="hover:text-white">Privacidad</a>
            <a href="#" className="hover:text-white">Términos</a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;