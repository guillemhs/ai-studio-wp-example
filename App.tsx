import React from 'react';
import Header from './components/Header';
import Hero from './components/Hero';
import Services from './components/Services';
import ValueProp from './components/ValueProp';
import Footer from './components/Footer';

const App: React.FC = () => {
  return (
    <div className="min-h-screen font-sans bg-agile-bg text-agile-text selection:bg-agile-vibrant selection:text-white">
      <Header />
      <main>
        <Hero />
        <Services />
        <ValueProp />
      </main>
      <Footer />
    </div>
  );
};

export default App;