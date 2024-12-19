import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Pagination from '@/Components/Pagination';
import { Link } from '@inertiajs/react';

export default function PegawaiIndex({auth, pegawai}) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Pegawai
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
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Nama</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Jabatan</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Atasan</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Kontak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {pegawai.data.map(({id,nama, jabatan, atasan, kontak}) => (
                                        <tr key={id} className='border-b'>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {id}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {nama}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {jabatan}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {atasan && atasan.nama ? atasan.nama : '-'}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {kontak}
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                            <Pagination links={pegawai.links} />
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
