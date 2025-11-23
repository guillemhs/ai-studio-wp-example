import { 
  BookOpen, 
  Users, 
  Code, 
  ShieldCheck, 
  Zap, 
  Heart 
} from 'lucide-react';
import { ServiceItem, ValueItem, NavLink } from './types';

export const APP_NAME = "Agile611";

export const NAV_LINKS: NavLink[] = [
  { label: 'Inicio', href: '#hero' },
  { label: 'Cursos Técnicos', href: '#technical' },
  { label: 'SAFe', href: '#safe' },
  { label: 'Scrum.org', href: '#scrum' },
  { label: 'Ciberseguridad', href: '#cybersecurity' },
  { label: 'Inteligencia Artificial', href: '#ai' },
  { label: 'Nosotros', href: '#values' },
  { label: 'Contacto', href: '#contact' },
];

export const SERVICES: ServiceItem[] = [
  {
    id: 'training',
    title: 'Formación',
    description: 'Capacitación especializada para equipos de alto rendimiento.',
    icon: BookOpen
  },
  {
    id: 'consulting',
    title: 'Consultoría',
    description: 'Acompañamiento estratégico para la transformación ágil.',
    icon: Users
  },
  {
    id: 'software',
    title: 'Desarrollo de Software',
    description: 'Soluciones tecnológicas a medida y escalables.',
    icon: Code
  },
  {
    id: 'devops',
    title: 'DevOps & Ciberseguridad',
    description: 'Integración continua y protección de activos digitales.',
    icon: ShieldCheck
  }
];

export const VALUES: ValueItem[] = [
  {
    id: 'innovation',
    title: 'Innovación',
    description: 'Buscamos constantemente nuevas formas de aportar valor.'
  },
  {
    id: 'quality',
    title: 'Calidad',
    description: 'Excelencia técnica en cada entrega.'
  },
  {
    id: 'security',
    title: 'Seguridad',
    description: 'Protección integral en todos los procesos.'
  },
  {
    id: 'talent',
    title: 'Talento Humano',
    description: 'Las personas son el centro de todo lo que hacemos.'
  }
];