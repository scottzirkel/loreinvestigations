/** @type {import('next').NextConfig} */
const nextConfig = {
  images: {
    remotePatterns: [
      new URL(
        "https://cdn.scottzirkel.com/prod/comics/com_Z3caUdQrqoN1HlfMsJ7rQ/images/743c857524a2174eba3c2a3cc69bb696/**",
      ),
    ],
  },
};

export default nextConfig;
