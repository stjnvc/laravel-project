import React from 'react';

const CameraCard = ({ title, children }) => {
    return (
        <div className="bg-white shadow-md rounded-lg p-6">
            {title && <h2 className="text-xl font-bold mb-4">{title}</h2>}
            {children}
        </div>
    );
};

export default CameraCard;
