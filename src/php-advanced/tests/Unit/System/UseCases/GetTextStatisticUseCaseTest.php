<?php

namespace App\Tests\Unity\System\UseCases;

use App\Entity\Text;
use App\Repository\TextRepository;
use App\System\UseCases\GetTextStatisticUseCase;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GetTextStatisticUseCaseTest extends KernelTestCase
{
    private EntityManager $entityManager;

    private TextRepository $textRepositoryMock;

    private ManagerRegistry $managerRegistryMock;

    private SessionInterface $sessionMock;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        $this->textRepositoryMock = $this->createMock(TextRepository::class);
        $this->managerRegistryMock = $this->createMock(ManagerRegistry::class);
        $this->sessionMock = $this->getMockBuilder(SessionInterface::class)->getMock();
    }

    public function test_handle_whit_new_text(): void
    {
        $getTextStatisticUseCase = new GetTextStatisticUseCase(
            $this->textRepositoryMock,
            $this->managerRegistryMock,
            $this->sessionMock,
            'some text',
        );

        $this->textRepositoryMock->expects($this->once())
            ->method('findOneByHash')
            ->with(hash("sha512", 'some text'))
            ->willReturn(null);

        $this->managerRegistryMock->expects($this->once())
            ->method('getManager')
            ->willReturn($this->entityManager);

        $this->sessionMock->expects($this->once())
            ->method('get')
            ->with('ids', [])
            ->willReturn([]);

        $this->sessionMock->expects($this->once())
            ->method('set');

        $this->assertInstanceOf(Text::class, $getTextStatisticUseCase->handle());
    }

    public function test_handle_whit_text_that_exist_in_data_base(): void
    {
        $getTextStatisticUseCase = new GetTextStatisticUseCase(
            $this->textRepositoryMock,
            $this->managerRegistryMock,
            $this->sessionMock,
            'some text',
        );

        $textEntityMock = $this->createMock(Text::class);
        $this->textRepositoryMock->expects($this->once())
            ->method('findOneByHash')
            ->with(hash("sha512", 'some text'))
            ->willReturn($textEntityMock);

        $this->managerRegistryMock->expects($this->never())
            ->method('getManager');

        $this->sessionMock->expects($this->never())
            ->method('get');

        $this->sessionMock->expects($this->never())
            ->method('set');

        $getTextStatisticUseCase->handle();
    }
}