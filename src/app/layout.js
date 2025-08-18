import "./globals.css";
import Logo from "@/components/logo";

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body className="bg-gradient-to-b from-stone-950 to-black">
        <header className="bg-red-950 p-4 text-center">
          <Logo />
        </header>
        <main className="mx-auto px-4 text-center md:px-12 lg:max-w-7xl">
          <div className="mx-auto max-w-2xl space-y-2 p-4 text-lg text-stone-200">
            <p>
              Lore Investigations follows the paranormal investigative team of
              Nathan and TJ. Their first case is The Creepy Barn, in which they
              go up against what is possibly a possessed teenage girl. Of
              course, it&apos;s hard to tell a regular teenage girl from one
              possessed by a ghost.
            </p>
            <p>
              Lore Investigations is written by Amanda Jones and
              <a
                href="https://scottzirkel.com"
                target="_blank"
                className="transition hover:text-red-700"
              >
                Scott Zirkel
              </a>
              , with art by
              <a
                href="http://www.matthebb.com"
                target="_blank"
                className="text-stone-400 underline transition hover:text-red-700"
              >
                Matt Hebb
              </a>
              . Jason Worthington is on inks and Juan Carlos Porras bringing up
              the colors.
            </p>
          </div>
          <footer className="space-y-2 text-center text-sm text-stone-400">
            <p>
              Copyright © 2009-{new Date().getFullYear()}{" "}
              <a
                className="text-red-700 transition hover:text-red-500"
                href="https://scottzirkel.com"
                target="_blank"
              >
                Scott Zirkel.
              </a>{" "}
              All rights reserved.
            </p>
            <p>
              Powered by{" "}
              <a
                className="text-red-700 transition hover:text-red-500"
                href="https://webstrips.app"
                target="_blank"
              >
                Webstrips
              </a>
            </p>
          </footer>
          {children}
        </main>
      </body>
    </html>
  );
}
