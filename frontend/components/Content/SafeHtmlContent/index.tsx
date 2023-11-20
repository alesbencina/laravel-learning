import React, { useEffect } from 'react';

const SafeHTMLContent = ({ html }) => {

    return (
        <div dangerouslySetInnerHTML={{ __html: html }} />
    );
};

export default SafeHTMLContent;
