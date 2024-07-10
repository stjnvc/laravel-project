import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function List ({auth}) {
    return (
        <AuthenticatedLayout user={auth.user}>

        </AuthenticatedLayout>
    )
}
