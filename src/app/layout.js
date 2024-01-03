import { Analytics } from '@vercel/analytics/react'
import { Inter } from 'next/font/google'
import Image from 'next/image'
import Link from 'next/link'
import { twMerge } from 'tailwind-merge'
import './globals.css'

const inter = Inter({ subsets: ['latin'] })

export const metadata = {
  title: 'Lore Investigations',
  description:
    'Lore Investigations is a stand-alone web comic following the paranormal research of a haunted barn. Written by Amanda Jones and Scott Zirkel, art by Matt Hebb, Jason Worthington, and Juan Carlos Porras.',
}

export default function RootLayout({ children }) {
  const date = new Date()
  return (
    <html lang="en">
      <body className={twMerge(inter.className, 'bg-gradient-to-b from-stone-950 to-black')}>
        <header className="bg-red-950 p-4 text-center">
          <Image src="/logo.png" width="950" height="290" alt="Lore Investigations" className="mx-auto" loading="eager" />
        </header>
        <main className="mx-auto px-4 text-center md:px-12 lg:max-w-7xl">
          <div className="mx-auto max-w-2xl space-y-2 p-4 text-lg text-stone-200">
            <p>
              Lore Investigations follows the paranormal investigative team of Nathan and TJ. Their first case is The Creepy
              Barn, in which they go up against what is possibly a possessed teenage girl. Of course, it&apos;s hard to tell a
              regular teenage girl from one possessed by a ghost.
            </p>
            <p>
              Lore Investigations is written by Amanda Jones and{' '}
              <Link href="https://scottzirkel.com" target="_blank" className="transition hover:text-red-700">
                Scott Zirkel
              </Link>
              {', '}
              with art by{' '}
              <Link
                href="http://www.matthebb.com"
                target="_blank"
                className="text-stone-400 underline transition hover:text-red-700"
              >
                Matt Hebb
              </Link>
              {'. '}
              Jason Worthington is on inks and Juan Carlos Porras bringing up the colors.
            </p>
          </div>
          <footer className="space-y-2 text-center text-sm text-stone-400">
            <p>
              Copyright © 2009 – {date.getFullYear()}{' '}
              <Link className="text-red-700 transition hover:text-red-500" href="https://scottzirkel.com" target="_blank">
                Scott Zirkel.
              </Link>{' '}
              All rights reserved.
            </p>
            <p>
              Powered by{' '}
              <Link className="text-red-700 transition hover:text-red-500" href="https://webstrips.app" target="_blank">
                Webstrips
              </Link>
            </p>
          </footer>
          {children}
        </main>
        <Analytics />
      </body>
    </html>
  )
}
