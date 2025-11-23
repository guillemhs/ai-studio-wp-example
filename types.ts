import { LucideIcon } from 'lucide-react';

export interface ServiceItem {
  id: string;
  title: string;
  description: string;
  icon: LucideIcon;
}

export interface ValueItem {
  id: string;
  title: string;
  description: string;
}

export interface NavLink {
  label: string;
  href: string;
}