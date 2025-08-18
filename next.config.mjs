/** @type {import('next').NextConfig} */
const nextConfig = {
  images: {
    remotePatterns: [
      new URL(
        "https://cdn.scottzirkel.com/prod/comics/com_Z3caUdQrqoN1HlfMsJ7rQ/images/**",
      ),
    ],
  },
};

export default nextConfig;
