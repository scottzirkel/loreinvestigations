import "./globals.css";
import Logo from "@/components/logo";

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body className="bg-gradient-to-b from-stone-950 to-black">
        <header className="bg-red-950 p-4 text-center">
          <Logo />
        </header>
        {children}
      </body>
    </html>
  );
}
