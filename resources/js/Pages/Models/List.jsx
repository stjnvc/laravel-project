import Authenticated from "@/Layouts/AuthenticatedLayout";
import React from "react";


export default function List({ auth, flexCamModels }){


    return (
        <div>
            <Authenticated
                header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Models</h2>}
                user={auth.user}
            >
                <div className="model-list">
                    {flexCamModels.map((model) => (
                        <div className="bg-white shadow-md rounded-lg p-6" key={model.id}>
                            {model.name && <h2 className="text-xl font-bold mb-4">{model.name}</h2>}
                        </div>
                    ))}
                </div>
            </Authenticated>
        </div>
    )
}
