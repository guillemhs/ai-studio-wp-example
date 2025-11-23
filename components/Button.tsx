import React from 'react';

interface ButtonProps extends React.ButtonHTMLAttributes<HTMLButtonElement> {
  variant?: 'primary' | 'vibrant' | 'outline' | 'white';
  className?: string;
  children: React.ReactNode;
}

const Button: React.FC<ButtonProps> = ({ 
  variant = 'primary', 
  className = '', 
  children, 
  ...props 
}) => {
  const baseStyles = "inline-flex items-center justify-center px-6 py-3 border text-base font-semibold rounded-md shadow-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2";
  
  const variants = {
    primary: "border-transparent text-white bg-agile-primary hover:bg-opacity-90 focus:ring-agile-primary",
    vibrant: "border-transparent text-white bg-agile-vibrant hover:bg-sky-400 focus:ring-agile-vibrant",
    outline: "border-agile-primary text-agile-primary bg-transparent hover:bg-agile-primary hover:text-white focus:ring-agile-primary",
    white: "border-transparent text-agile-deep bg-white hover:bg-gray-100 focus:ring-white",
  };

  return (
    <button 
      className={`${baseStyles} ${variants[variant]} ${className}`} 
      {...props}
    >
      {children}
    </button>
  );
};

export default Button;