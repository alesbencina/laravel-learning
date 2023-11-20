// components/Layout.tsx

import React from 'react';
import Header from "../Header";
import Footer from "../Footer";

interface LayoutProps {
    children: React.ReactNode;
}

const Layout: React.FC<{children: React.ReactNode}> = ({ children }) => {
    return (
        <>
            <Header />
            <main className="py-8 px-4 md:px-6">
                {children}
            </main>
            <Footer />
        </>
    );
};

export default Layout;
