import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Pagination from '@/Components/Pagination';
import { Link } from '@inertiajs/react';

export default function PeminjamanIndex({ auth, peminjaman }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Peminjaman
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
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Kendaraan</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Peminjam</th>
                                        <th className='px-6 py-3 text-center text-lg font-medium text-black'>Penyetuju 1</th>
                                        <th className='px-6 py-3 text-center text-lg font-medium text-black'>Penyetuju 2</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Status</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Tanggal Pinjam</th>
                                        <th className='px-6 py-3 text-left text-lg font-medium text-black'>Tanggal Pengembalian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {peminjaman.data.map(({id,kendaraan,peminjam, penyetuju1, penyetuju2, status, tanggal_pinjam, tanggal_kembali}) => (
                                        <tr key={id} className='border-b'>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {kendaraan}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {peminjam}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {penyetuju1}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {penyetuju2}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {status}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {tanggal_pinjam}
                                            </td>
                                            <td className='px-6 py-3 whitespace-nowrap'>
                                                {tanggal_kembali}
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                            <Pagination links={peminjaman.links} />
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
