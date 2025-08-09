import React from 'react'

export default function App(){
  return (
    <div className="min-h-screen bg-slate-50 text-slate-900">
      <header className="bg-[#0b2a4a] text-white p-6">
        <div className="max-w-6xl mx-auto flex justify-between items-center">
          <div>
            <h1 className="text-2xl font-bold">KSR Avocats</h1>
            <p className="text-sm">Cabinet d'avocats — Caen</p>
          </div>
          <nav className="space-x-4">
            <a href="#expertises" className="hover:underline">Expertises</a>
            <a href="#contact" className="hover:underline">Contact</a>
          </nav>
        </div>
      </header>
      <main className="max-w-6xl mx-auto p-6">
        <h2 className="text-3xl font-extrabold">Défendre vos droits</h2>
        <p className="mt-4 text-gray-700">Site React — prototype complet. Intégrations Stripe, Calendly et espace client prêtes à être branchées côté serveur.</p>
      </main>
      <footer className="bg-[#0b2a4a] text-white p-4 text-center">© 2025 KSR Avocats</footer>
    </div>
  )
}
