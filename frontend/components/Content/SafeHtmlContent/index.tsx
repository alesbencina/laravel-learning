import React from 'react';

interface SafeHtmlContentProps {
    html: string;
}

const SafeHTMLContent: React.FC<SafeHtmlContentProps> = ({ html }) => {
    return (
        <div dangerouslySetInnerHTML={{ __html: html }} />
    );
};

export default SafeHTMLContent;
