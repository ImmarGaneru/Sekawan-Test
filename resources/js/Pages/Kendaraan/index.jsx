import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Pagination from '@/Components/Pagination';
import { Link } from '@inertiajs/react';

export default function KendaraanIndex({auth, kendaraan}) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Kendaraan
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            <table className='min-w-full'>
                                <thead>
                                    <tr className='border-b-2'>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Id</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Merek</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Model</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Plat Nomor</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {kendaraan.data.map(({id,merk, model, plat_nomor, status}) => (
                                        <tr key={id} className='border-b'>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {id}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {merk}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {model}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {plat_nomor}
                                            </td>
                                            
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {status}
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                            <Pagination links={kendaraan.links} />
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
